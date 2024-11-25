<x-layout>
    <div class=" flex-row">
        <x-heading >Create Student</x-heading>
        <form method="POST" action="/students/{{$student->id}}" class="px-10 flex flex-col justify-center  " style="margin:auto; width:40%;">
            @csrf
            @method('PATCH')

            <x-input name="name" value="{{$student->name}}" >Name</x-input>

            <x-input name="address" value="{{$student->address}}">Address</x-input>
            <x-input name="mobile" value="{{$student->mobile}}">Contact #</x-input>
        
            <div class="mt-6 flex items-center justify-center gap-x-6 ml-20">
                <a href="/students" type="button" class="text-sm/6 font-semibold  pb-2 text-red-500">Cancel</a>
                <x-button class="bg-green-500 mt-2" type="submit">Update</x-button>
            </div>
        </form>
    </div> 
    
   
</x-layout>