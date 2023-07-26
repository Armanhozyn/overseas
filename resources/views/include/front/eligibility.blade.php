<form action="{{ route('eligibility.store') }}" method="post">
    @csrf
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="text" name="name" placeholder="Name" required="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="text" name="phone" placeholder="Phone no" required="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <div class="select-box">
                <select class="wide" name="marital">
                    <option data-display="Marital Status">Marital Status</option>
                    <option value="1">Married</option>
                    <option value="2">Unmarried</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <div class="select-box">
                <select class="wide" name="income">
                    <option data-display="Monthly Income">Monthly Income</option>
                    <option value="1500">$1500</option>
                    <option value="2000">$2000</option>
                    <option value="2500">$2500</option>
                    <option value="3000+">$3000+</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <input type="email" name="email" placeholder="Email Address" required="">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <input type="text" name="occupation" placeholder="Current Occupation" required="">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <button class="theme-btn btn-two">Check Now <i class="flaticon-next"></i></button>
        </div>
    </div>
</form>
