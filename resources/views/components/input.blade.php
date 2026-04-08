@props(['label', 'name' ,'type' =>'text', 'value'=>''])

<div class="mb-4">
    <label for="">{{ $label }}</label>
    <input name="{{ $name }}" value="{{$value}}"
        class="block w-full bg-transparent rounded-lg py-2.5 px-4 border border-default-200 focus:ring-transparent focus:border-default-200 dark:bg-default-50"
        type="{{$type}}">
</div>
