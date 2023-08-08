<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit class {{$myClass->name}}</h3>
    </div>
    <div class="card-body">
        <form action="{{route('classes.update', $myClass->id)}}" method="POST" class="md:w-6/12">
            <x-display-validation-errors/>
            <x-input id="edit-class-name" name="name" label="Class Name" placeholder="Enter class name" fgroup-class="" value="{{$myClass->name}}"/> 
            @csrf
            @method('PUT')
            <x-button label="Edit" class="w-full md:w-6/12" theme="primary" icon="fas fa-key" type="submit"/>
        </form>
    </div>
</div>

