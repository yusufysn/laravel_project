<form method="post" action="{{route('create-category')}}" id="insertCategoryForm">
    @csrf
    <input name="category_id" value="{{$catId??null}}" type="hidden"/>
    <div class="form-group">
        <label>Kategori Adı </label>
        <input class="form-control" type="text" name="category_name">

    </div>

    @error('category_name')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    @error('category_id')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <button class="btn btn-primary">Ekle</button>
    @if(isset($catId))
        <button class="btn btn-outline-danger" type="button" onclick="deleteCategory();">Sil</button>
        <button class="btn btn-outline-warning" type="button" onclick="updateCategory();" >Değiştir</button>
    @endif

</form>

@if(isset($catId))
    <script>
        function deleteCategory() {
            swal({
                    title: "Bu kategoriyi silmek istiyor musunuz?",
                    text: "Bu işleme devam ettiğinizde bu kategoriye bağlı ürün ve özellikler beraberinde silinecektir!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Evet, silinsin!",
                    cancelButtonText: "Hayir, silinmesin!",
                    closeOnConfirm: false
                },
                function () {
                    $("#deleteCategoryForm").submit();
                });

        }
        function updateCategory() {
            swal({
                    title: "Bu kategori ismi değiştirilecektir!",
                    text: "Devam etmek için Evet butonuna tıklayınız!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Evet, değiştirilsin!",
                    cancelButtonText: "Hayir, değiştirilmesin!",
                    closeOnConfirm: false
                },
                function () {
                    let data=$("#insertCategoryForm [name=category_name]").val();
                    $("#updateCategoryForm [name=category_name]").val(data);

                    $("#updateCategoryForm").submit();
                });

        }
    </script>

    <form id="deleteCategoryForm" method="post" action="{{route('delete-category',$catId)}}">
        @csrf
        @method('delete')
    </form>
    <form id="updateCategoryForm" method="post" action="{{route('update-category',$catId)}}">
        @csrf
            <input type="hidden" name="category_name">
            @method('put')
    </form>
@endif
















