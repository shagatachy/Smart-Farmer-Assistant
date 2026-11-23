<div class="col-md-8">
    <form action="{{ route('silo.store') }}" method="POST">
        @csrf
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="name">Silo Name</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="name" name="name"  required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="type">Silo Type</label>
            <div class="col-sm-8">
                
                <select style="border: #4B6F44 solid" type="text" class="form-control" id="type" name="type"  required>
                    <option value="" disabled selected>Select type</option>
                    <option value="Structure">Based on Structure</option>
                    <option value="Technology & Automation">Based on Technology & Automation</option>
                    <option value="Material">Based on Material</option>
                    <option value="Usage">Based on Usage</option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="capacity">Capacity (in tons)</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="number" class="form-control" id="capacity" name="capacity"  required>
            </div>
        </div>

        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="location">Location</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="location" name="location"  required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="material">Stored Material</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="material" name="material"  required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="notes">Notes</label>
            <div class="col-sm-8">
                <textarea class="form-control" id="notes" name="notes" rows="2" ></textarea>
            </div>
        </div>
        
        <br>

        <button type="submit" class="btn" style="background:#4B6F44; color:white">Submit</button>
    </form>
</div>
