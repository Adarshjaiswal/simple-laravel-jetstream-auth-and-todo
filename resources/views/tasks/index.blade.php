<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks List') }}
        </h2>
      
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
                
                    <!-- table -->
 <table id="myTable" class="display " class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Status</th>
            <th>Complete Task</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task){
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                    <td>
                        @if ($task->is_completed == 1)
                            <span class="text-green-500">Completed</span>
                        @else
                            <span class="text-red-500">Not Completed</span>
                        @endif
        </td>
                <td>
                @if ($task->is_completed == 0)
                <a href="{{ route('tasks.complete', $task->id) }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Complete Task</a>
                        @else
                          --
                        @endif
                  
                   
                
                </td>
                <td>
                   
                  
                <form action="{{ route('tasklist.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                </form>
                </td>
            </tr>
        }
        @endforeach
          
       
       
    </tbody>
</table>
                  
                
                
            </div>

           

            
        </div>
    </div>
</x-app-layout>
