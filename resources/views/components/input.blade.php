@props(['name','value'])

<div class="ml-4 pt-4" style="width: 550px; ">
    <div class="">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label for="{{$name}}" class="block text-sm/6 font-medium text-gray-900">{{ $slot }}</label>
            <div class="mt-4">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input value="{{$value === 'false' ? old($name) : $value}}" type="text" name="{{$name}}" id="{{$name}}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
            </div>
            </div>
        </div>
        </div>
    </div>

    <x-forms.error :error="$errors->first($name)" />
</div>