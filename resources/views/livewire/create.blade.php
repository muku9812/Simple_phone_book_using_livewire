<h1>Add Phone</h1>
<form>
    <div class="form-control">
        <div class="form-group ">
            <label for="first"> First Name</label>
            <input type="text" wire:model="name" id="first_name" class="form-control" placeholder="Enter Your First Name">
            @error('name')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group ">
            <label for="inputPassword4">Address</label>
            <input type="text"  wire:model="address" id="address" class="form-control" id="inputPassword4" placeholder="Enter Your Address">
            @error('address') <span class="text-danger">{{$message}}</span>@enderror
        </div>
    <div class="form-group ">
        <label for="phone">Phone</label>
        <input type="text"  wire:model="phone" id="phone" class="form-control"  placeholder="Enter Your Phone">
        @error('phone') <span class="text-danger">{{$message}}</span>@enderror
    </div>
        <div class="form-group">
            <label for="inputPassword4">Email</label>
            <input type="email"  wire:model="email" id="email" class="form-control"  placeholder="Enter Your email">
            @error('address') <span class="text-danger">{{$message}}</span>@enderror
        </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <select id="inputState"  wire:model="gender" class="form-control">
            <option selected>Choose gender</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
        </select>
        @error('gender') <span class="text-danger">{{$message}}</span>@enderror
    </div>

<div class="form-group mt-2">
    <button type="submit" wire:click.prevent="Insert" class="btn btn-sm btn-primary">Save</button>
</div>
    </div>
</form>
