<form method="post" action="{{route('create-category')}}">
    @csrf
    <input name="category_id" value="{{$catId??null}}">
    <div class="form-group">
        <label>Kategori Adı</label>
        <input name="category_name" class="form-control"/>
    </div>

    @error('category_name')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    @error('category_id')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <button class="btn btn-primary">EKLE</button>
</form>