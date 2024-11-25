<x-layout>
    <div class=" flex-row">
        <x-heading >Create teacher</x-heading>
        <form method="POST" action="/teachers/{{$teacher->id}}" class="px-10 flex flex-col justify-center  " style="margin:auto; width:40%;">
            @csrf
            @method('PATCH')

            <x-input name="name" value="{{$teacher->name}}" >Name</x-input>

            <x-input name="address" value="{{$teacher->address}}">Address</x-input>
            <x-input name="mobile" value="{{$teacher->mobile}}">Contact #</x-input>
        
            <div class="mt-6 flex items-center justify-center gap-x-6 ml-20">
                <a href="/teachers" type="button" class="text-sm/6 font-semibold  pb-2 text-red-500">Cancel</a>
                <x-button class="bg-green-500 mt-2" type="submit">Update</x-button>
            </div>
        </form>
    </div> 
    
   
</x-layout>