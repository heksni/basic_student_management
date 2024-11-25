<x-layout>
    <div class=" flex-row">
        <x-heading >Student's List</x-heading>

        <div class="flex justify-end mr-12 pr-2">
            <x-button class="bg-green-600 py-2 px-3 mr-4"><a href="/students/create">Add Student</a></x-button>
        </div>

        <div class="flex flex-col " style="margin:auto; width:100%">
            <div class="flex justify-between border w-full mx-10 px-10 py-4 text-white bg-black rounded font-bold" style="margin:auto; width:90%">
                <span class="flex capitalize">#</span>
                <span>NAME</span>
                <span>ADDRESS</span>
                <span>CONTACT #</span>
                <span>ACTIONS</span>
            </div>
            <div class="" style="margin:auto; width:90%">
                @if (count($students) == 0)
                    <div class="flex justify-center mt-10 font-bold">
                        <h1>NO STUDENTS FOUND</h1>
                    </div>
                @else
                        @foreach ($students as $student )
                                <div class="py-3 flex px-3 border "  >
                                    <div class="w-6 text-center ml-5 mr-16 pt-2">
                                        {{$student->id}}
                                    </div>
                                    <div class="ml-16 pl-10 pt-2 w-60 text-left ">
                                        {{$student->name}}
                                    </div>
                                    <div class="ml-16 pl-10 pt-2 w-80 text-left ">
                                        {{ $student->address }}
                                    </div>
                                    <div class="  ml-16  pt-2 w-60 text-left">
                                        {{$student->mobile}}
                                    </div>
                                    <div class="  ml-5 pt-2 w-18 ">
                                    
                                        <form method="POST" action="/students/{{$student->id}}" id="delete-form" class="">
                                            @csrf
                                            @method('DELETE')
                                            <x-button class="bg-green-600"><a href="/show">View</a></x-button>
                                            <x-button class="bg-blue-600"><a href="/students/{{$student->id}}/edit">Edit</a></x-button>
                                            <x-button  class="bg-red-600" type="submit">Delete</x-button>
                                        </form>
                                    </div>
                                </div>
                            
                            @endforeach
                @endif
            </div>
        </div >
        <div class="pt-4 px-20">
            {{$students->links()}}
        </div>
    </div>

   
</x-layout>