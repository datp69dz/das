<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Class</h3>
    </div>
    <div class="card-body">
        <form action="{{route('classes.store')}}" method="POST" class="md:w-6/12">
            <x-display-validation-errors/>
            <x-input id="class-name-field" name="name" label="Class Name" placeholder="Enter class name"/>
            @csrf
            <x-button label="Create" icon="fas fa-key" type="submit" class="w-full my-7 md:w-6/12"/>
        </form>
    </div>
</div>
