<div class="col-md-8">
    <form action="{{ route('agroforestry.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="name">Agro-Forestry Name</label>
            <div class="col-sm-6">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="name" name="name"  required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="type">Agro-Forestry Type</label>
            <div class="col-sm-8">
               
                <select style="border: #4B6F44 solid" type="text" class="form-control" id="type" name="type"  required>
                    <option value="" disabled selected>Select type</option>
                    <option value="Component Combination">Based on Component Combination</option>
                    <option value="Purpose & Benefits">Based on Purpose & Benefits</option>
                    <option value="Land Use & Ecosystem">Based on Land Use & Ecosystem</option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="planting_date">Planting Date</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="date" class="form-control" id="planting_date" name="planting_date" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="harvest_date">Harvest Date</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="date" class="form-control" id="harvest_date" name="harvest_date">
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="quantity">Quantity</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="number" class="form-control" id="quantity" name="quantity"  required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="location">Location</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="location" name="location"  required>
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