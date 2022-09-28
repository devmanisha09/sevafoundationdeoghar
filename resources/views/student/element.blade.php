
@include('partials.flash_messages.flashMessages')

<div class="col-sm-6">
    <div class="form-group"><label>Name<span class="required-star"> *</span></label>
        <input value="{{ isset($student->user->name) ? $student->user->name:old('name') }}" required="required" name="name" type="text" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Roll<span class="required-star"> *</span></label>
        <input value="{{ isset($student->roll_number) ? $student->roll_number:old('roll_number') }}" required="required" name="roll_number" type="text" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Phone<span class="required-star"> *</span></label>
        <input value="{{ isset($student->phone) ? $student->phone:old('phone') }}" required="required" name="phone" type="text" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Email<span class="required-star"> *</span></label>
        <input value="{{ isset($student->user->email) ? $student->user->email:old('email') }}" required="required" name="email" type="email" class="form-control">
       {{-- @error('email')
            <p class="color-danger text-xs italic">{{ $message }}</p>
        @enderror--}}
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Class<span class="required-star"> *</span></label>

        <select class="form-control" name="class_id" required>

            <option value="">--Select--</option>

            @foreach($classes as $class)
                <option value="{{ $class->id }}"
                <?php if (isset($student->class_id)) {
    if ($class->id == $student->class_id) {
        echo "selected";
    }}
?>>
                 {{ $class->name }}
                </option>
            @endforeach

        </select>

    </div>
</div>



<div class="col-sm-6">
    <div class="form-group"><label>Session</label>
        <input value="{{ isset($student->session) ? $student->session:old('session') }}" name="session" type="text" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Division</label>
        <input value="{{ isset($student->division) ? $student->division:old('division') }}" name="division" type="text" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Gender<span class="required-star"> *</span></label>
        <select class="form-control m-b" name="gender" required>
            <option value="">--Select--</option>
            <option value="male"<?php if (isset($student->gender)) {if ($student->gender == 'male') {echo "selected";}}?>
>Male</option>
            <option value="female"<?php if (isset($student->gender)) {if ($student->gender == 'female') {echo "selected";}}?>
>Female</option>
            <option value="other"<?php if (isset($student->gender)) {if ($student->gender == 'other') {echo "selected";}}?>
>Other</option>
        </select>
    </div>
</div>






<div class="col-sm-6">
    <div class="form-group"><label>Age<span class="required-star"> *</span></label>
        <input value="{{ isset($student->age) ? $student->age:old('age') }}" name="age" type="text" required class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Date of birth</label>
        <input value="{{ isset($student->date_of_birth) ? $student->date_of_birth:old('date_of_birth') }}" name="date_of_birth" type="date" class="form-control">
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group"><label>Address</label>
        <input value="{{ isset($student->address) ? $student->address:old('address') }}" name="address" type="text" class="form-control">
    </div>
</div>

<script>
    $('.chosen-select').chosen({
        width: "100%",
        search_contains: true
    });

    /*$('.chosen-search input').on('keyup', function(evt, params) {
        console.log(this.value)
    });*/

   /* $('test').chosen();
    $('.select').click(function(){
        $('option').prop('selected', true);
        $('select').trigger('liszt:updated');
    });
    $('.deselect').click(function(){
        $('option').prop('selected', false);
        $('select').trigger('liszt:updated');
    });*/

</script>
