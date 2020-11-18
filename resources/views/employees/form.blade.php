<div class="form-group">

    <input type="text" class="form-control" name="name" value="{{old('name') ?? $employee->name }}" placeholder="Name">
    <h6><small class="text-muted">{{ $errors->first('name') }}</small></h6>
</div>
<div class="form-group">
    <input type="text" class="form-control" name="email" value="{{old('email') ?? $employee->email }}" placeholder="Email">
    <h6><small class="text-muted">{{ $errors->first('email') }}</small></h6>
</div>

<div class="form-group">
    <label for="active" class="text-muted">Status</label>
    <select name="active" id="active" class="form-control" >
        <option value="" disabled>Select Employee Status</option>
        @foreach($employee->activeOption() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $employee->active == $activeOptionValue ? 'selected' : '' }}>
                {{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="company_id" class="text-muted">Company</label>
    <select name="company_id" id="company_id" class="form-control" >
        @foreach($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $employee->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach
    </select>
</div>
@csrf
