<div class="card" >
    <div class="card-header">
        <h4 class="card-title">All Classes</h4>
    </div>
    <div class="card-body">
        <livewire:datatable :model="App\Models\MyClass::class" :columns="
        [
            ['property' => 'name'] , 
            ['type' => 'dropdown', 'name' => 'actions','links' => [
                ['href' => 'classes.edit', 'text' => 'Settings', 'icon' => 'fas fa-cog'],
                ['href' => 'classes.show', 'text' => 'View', 'icon' => 'fas fa-eye'],
            ]],
            ['type' => 'delete', 'name' => 'Delete', 'action' => 'classes.destroy']
         ]
        "/>
    </div>
</div>
