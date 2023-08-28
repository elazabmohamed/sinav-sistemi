<x-app-layout>
    <x-slot name="header">
        Quizzes
    </x-slot>
    <a href="{{route('quizzes.create')}}" class="btn btn-outline-primary" style="margin-bottom: 10px;">Create Quiz</a>
    <div class="card">
        
        <div class = "card-body">
            <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th scope="col">Quiz Title</th>
                    <th scope="col">Question Number</th>
                    <th scope="col">Date</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Passing Score</th>
                    <th scope="col">Status</th>
                    <th scope="col" style="width: 13rem;">Options</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($quizzes as $quiz )
                    <tr>
                        <td>{{$quiz->title}}</td>
                        <td>{{$quiz->questions_count}}</td>
                        <td>{{$quiz->finished_at}}</td>
                        <td>{{$quiz->duration}} min</td>
                        <td>{{$quiz->passing_score}}</td>
                        <td>{{$quiz->status}}</td>
                        <td>
                            <a href="{{route('quizzes.edit', $quiz->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{route('questions.index', $quiz->id)}}" class="btn btn-sm btn-info">Questions</a>
                            <a href="{{route('quizzes.destroy', $quiz->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        
              {{$quizzes->links()}}
        </div>
    </div>
    


</x-app-layout>
