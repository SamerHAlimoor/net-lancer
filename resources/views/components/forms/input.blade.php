<div class="form-group">
<label for="{{$id}}">{{$lable}}</label>
<input class="form-control form-control-lg" 
    type="{{$type ?? 'text'}}" placeholder="{{$lable}}" id="{{$id}}" name="{{$name}}" label="{{$lable}}" 
    aria-label="{{$lable}}" value="{{ old($name,$value) }}"
    {{$attributes->class(['form-control','is-invalid'=>$errors->has($name)])}}
    {{$attributes}}
    @error('{{$name}}') is-invalid @enderror
    >
   
@error('{{$name}}')
<p class="text-danger">{{ $message }}</p>
@enderror
</div>