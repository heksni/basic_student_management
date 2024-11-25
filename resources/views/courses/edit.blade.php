<x-layout>
    <div class=" flex-row">
        <x-heading >Create Course</x-heading>
        <form method="POST" action="/courses/{{$course->id}}" class="px-10 flex flex-col justify-center  " style="margin:auto; width:40%;">
            @csrf
            @method('PATCH')

            <x-input name="name" value="{{$course->name}}" >Name</x-input>

            <div class="mt-4 ml-4  ">
                <label for="syllabus" class="block mt-2">Select multiple Syllabus:</label>
                <select style="width:60%; height:100%" id="syllabus" value="false" name="syllabus[]" multiple class="form-select mt-1 p-2 h-48 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="history" @if(in_array('history', json_decode($course->syllabus))) selected @endif>History</option>
                    <option value="economics" @if(in_array('economics', json_decode($course->syllabus))) selected @endif>Economics</option>
                    <option value="literature" @if(in_array('literature', json_decode($course->syllabus))) selected @endif>Literature</option>
                    <option value="science" @if(in_array('science', json_decode($course->syllabus))) selected @endif>Science</option>
                    <option value="mathematics" @if(in_array('mathematics', json_decode($course->syllabus))) selected @endif>Mathematics</option>
                    <option value="physics" @if(in_array('physics', json_decode($course->syllabus))) selected @endif>Physics</option>
                    <option value="chemistry" @if(in_array('chemistry', json_decode($course->syllabus))) selected @endif>Chemistry</option>
                    <option value="biology" @if(in_array('biology', json_decode($course->syllabus))) selected @endif>Biology</option>
                    <option value="philosophy" @if(in_array('philosophy', json_decode($course->syllabus))) selected @endif>Philosophy</option>
                    <option value="computer science" @if(in_array('computer science', json_decode($course->syllabus))) selected @endif>Computer Science</option>
                    <option value="psychology" @if(in_array('psychology', json_decode($course->syllabus))) selected @endif>Psychology</option>
                    <option value="sociology" @if(in_array('sociology', json_decode($course->syllabus))) selected @endif>Sociology</option>
                    <option value="political science" @if(in_array('political science', json_decode($course->syllabus))) selected @endif>Political Science</option>
                    <option value="engineering" @if(in_array('engineering', json_decode($course->syllabus))) selected @endif>Engineering</option>
                </select>
                <x-forms.error :error="$errors->first($course->syllabus)" />
            </div>
            <x-input name="duration" value="{{$course->duration}}">Duration: in hrs</x-input>
        
        
            <div class="mt-6 flex items-center justify-center gap-x-6 ml-20">
                <a href="/courses" type="button" class="text-sm/6 font-semibold  pb-2 text-red-500">Cancel</a>
                <x-button class="bg-green-500 mt-2" type="submit">Update</x-button>
            </div>
        </form>
    </div> 
    
   
</x-layout>