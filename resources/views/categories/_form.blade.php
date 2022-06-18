<div class="form-group">
    <input class="form-control form-control-lg" 
    type="text" placeholder="Category Name" id="name" name="name" aria-label="Category Name" value="{{ old('description', $category->name) }}">

</div>
<div class="form-group">
    <input class="form-control form-control-lg" 
    type="text" placeholder="Category Slug" id="slug" name="slug" label="Category Slug" aria-label="Category Slug" value="{{ old('description', $category->slug) }}">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" @error('description') is-invalid @enderror>{{ old('description', $category->description) }}</textarea>
    @error('description')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <select class="form-select" aria-label="Select Parent ID" name="parent_id">
        <option selected>Select Parent ID</option>
        @foreach ($parents as $parent)
        
        <option value="{{$parent->id}}" @if ($category->parent_id == $parent->id)
            selected
        @endif >{{$parent->name}}</option>
       


        @endforeach
      </select>
</div>
<div class="form-group">
    <label for="art_file">Art File</label>
    <input type="file" id="art_file" name="art_file" class="form-control @error('art_file') is-invalid @enderror">
    @error('art_file')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <button class="btn btn-primary">Save</button>
</div>