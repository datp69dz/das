<div class="md:flex gap-2">
    <x-select id="nationality" name="nationality" label="Nationality *" group-class="md:w-6/12" wire:model="nationality"> 
        <option value="Vietnam">Vietnam</option>
        <option value="Thailand">Thailand</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Philippines">Philippines</option>
        <option value="Singapore">Singapore</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Laos">Laos</option>
        <option value="Brunei">Brunei</option>
        <option value="Timor-Leste">Timor-Leste</option>
        <!-- Thêm các tùy chọn quốc gia khác tại đây -->
    </x-select>
    <x-select id="state" name="state" label="State *" group-class="md:w-6/12" wire:model="state">
        <option value="state1">State 1</option>
        <option value="state2">State 2</option>
        <!-- Thêm các tùy chọn tiểu bang/khu vực khác tại đây -->
    </x-select>
</div>
    