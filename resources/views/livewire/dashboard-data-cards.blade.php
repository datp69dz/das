@hasanyrole('admin|super-admin')
    <div class="card">
        <div class="card-body">
            <div>

                @can('read class')
                <div class="box">
                    <x-info-box title="{{$classes}}" text="Classes" url="{{route('classes.index')}}" url-text="View classes" colour="bg-green-500"  text-colour="text-white"/>
                </div>
                    @endcan
                @can('read student')
                <div class="box">
                    <x-info-box title="{{$students}}" text="trainee (active)" icon=" text-dark" theme="yellow" url="{{route('students.index')}}" url-text="View students" colour="bg-blue-700"  text-colour="text-white"/>
                </div>
                @endcan
                @can('read teacher')
                <div class="box">
                    <x-info-box title="{{$teachers}}" text="Trainer" icon=" text-dark" theme="orange" url="{{route('teachers.index')}}" url-text="View Trainer" colour="bg-indigo-700"  text-colour="text-white"/>
                </div>
                 @endcan
            </div>
        </div>
    </div>
@endhasanyrole