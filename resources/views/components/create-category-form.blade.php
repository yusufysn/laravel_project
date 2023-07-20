<form method="post" action="{{route('create-category')}}" id="insertCategoryForm">
    @csrf
    <input name="category_id" value="{{$catId??null}}" type="hidden"/>
    <div class="form-group">
        <label>Kategori Adı </label>
        <input class="form-control" type="text" name="category_name">

    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button class="btn btn-primary">Ekle</button>
    @if(isset($catId))
        <button class="btn btn-danger" type="button" onclick="deleteCategory();">Sil</button>
        <button class="btn btn-warning" type="button" onclick="updateCategory()">Değiştir</button>

        <script>
            function deleteCategory() {
                swal({
                        title: "Bu kategoriyi silmek istiyormusunuz?",
                        text: "Bu işleme devam ettiğinizde bu kategoriye bağlı ürün ve özellikler beraberinde silinecektir!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function () {
                        $("#deleteCategoryForm").submit();
                    });
            }
            function updateCategory() {
                swal({
                        title: "Bu kategoriyi güncellemek istiyormusunuz?",
                        text: "Bu işleme devam ettiğinizde bu kategoriye bağlı ürün ve özellikler beraberinde güncellenecektir!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, güncelle!",
                        cancelButtonText: "Güncelleme!",
                        closeOnConfirm: false
                    },
                    function () {
                        let data = $('#insertCategoryForm [name=category_name]').val();
                        $('#updateCategoryForm [name=category_name]').val(data);
                        $("#updateCategoryForm").submit();
                    });
            }
        </script>
    @endif
</form>
@if (isset($catId))
    <form id="deleteCategoryForm" method="post" action="{{route('delete-category',$catId)}}">
        @csrf
        @method('delete')
    </form>
    <form id="updateCategoryForm" method="post" action="{{route('update-category',$catId)}}">
        @csrf
        @method('put')
        <input name="category_name" type="hidden"/>
    </form>
@endif