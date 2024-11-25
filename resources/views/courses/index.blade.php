<x-layout>
    <div class=" flex-row">
        <x-heading >Course's List</x-heading>

        <div class="flex justify-end mr-12 pr-2">
            <x-button class="bg-green-600 py-2 px-3 mr-4"><a href="/courses/create">Add Course</a></x-button>
        </div>

        <div class="flex flex-col " style="margin:auto; width:100%">
            <div class="flex justify-between border w-full mx-10 px-10 py-4 text-white bg-black rounded font-bold" style="margin:auto; width:90%">
                <span class="flex capitalize">#</span>
                <span>NAME</span>
                <span>SYLLABUS</span>
                <span>DURATION</span>
                <span>ACTIONS</span>
            </div>
            <div class="" style="margin:auto; width:90%">
                @if (count($courses) == 0)
                
                    <div class="flex justify-center mt-10 font-bold">
                        <h1>NO COURSES FOUND</h1>
                    </div>
                @else
                        @foreach ($courses as $course )
                                <div class="py-3 flex px-3 border "  >
                                    <div class="w-6 text-center ml-5 mr-16 pt-2">
                                        {{$course->id}}
                                    </div>
                                    <div class="ml-16 pl-10 pt-2 w-60 text-left ">
                                        {{$course->name}}
                                    </div>
                                    <div class="ml-16 pl-10 pt-2 w-80 text-left capitalize">
                                        {{ str_replace(['[', ']', '"'], ' ',$course->syllabus) }}
                                    </div>
                                    <div class="  ml-16  pt-2 w-60 text-left">
                                        {{$course->duration}}
                                    </div>
                                    <div class="  ml-5 pt-2 w-18 ">
                                    
                                        <form method="POST" action="/courses/{{$course->id}}" id="delete-form" class="">
                                            @csrf
                                            @method('DELETE')
                                            <x-button class="bg-green-600"><a href="/show">View</a></x-button>
                                            <x-button class="bg-blue-600"><a href="/courses/{{$course->id}}/edit">Edit</a></x-button>
                                            <x-button  class="bg-red-600" type="submit">Delete</x-button>
                                        </form>
                                    </div>
                                </div>
                            
                            @endforeach
                @endif
            </div>
        </div >
        <div class="pt-4 px-20">
            {{$courses->links()}}
        </div>
    </div>

   
</x-layout>