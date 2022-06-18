
    <x-forms.input id="name" type="text" name="name" lable="Category Name"  value="{{ old('name') }}" placeholder="Category Name"/>



    <x-forms.input id="slug" type="text" name="slug" lable="Category Slug"  value="{{ old('slug') }}" placeholder="Category Slug" />


<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" @error('description') is-invalid @enderror>{{ old('description') }}</textarea>
    @error('description')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <x-forms.select id="parent_id" aria-label="Select Parent ID" name="parent_id" label="Parent" :options="$parents->pluck('name', 'id')" :selected="$category->parent_id" />
    
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