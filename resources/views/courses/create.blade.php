<x-layout>
    <div class=" flex-row">
        <x-heading >Create Course</x-heading>
        <form method="POST" action="/courses" class="px-10 flex flex-col justify-center  " style="margin:auto; width:40%;">
            @csrf
            <x-input name="name" value="false">Subject</x-input>
            <div class="mt-4 ml-4  ">
                <label for="syllabus" class="block mt-2">Select multiple Syllabus:</label>
                <select style="width:60%; height:100%" id="syllabus" name="syllabus[]" multiple class="form-select mt-1 p-2 h-48 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="history">History</option>
                    <option value="economics">Economics</option>
                    <option value="literature">Literature</option>
                    <option value="science">Science</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="biology">Biology</option>
                    <option value="philosophy">Philosophy</option>
                    <option value="computer science">Computer Science</option>
                    <option value="psychology">Psychology</option>
                    <option value="sociology">Sociology</option>
                    <option value="political science">Political Science</option>
                    <option value="engineering">Engineering</option>
                </select>
            </div>
            <x-input name="duration" value="false">Duration: in hrs</x-input>
        
            <div class="mt-6 flex items-center justify-center gap-x-6 ml-20">
                <a href="/courses" type="button" class="text-sm/6 font-semibold  pb-2 text-red-500">Cancel</a>
                <x-button class="bg-green-500 mt-2" type="submit">Create</x-button>
            </div>
        </form>
    </div>
</x-layout>