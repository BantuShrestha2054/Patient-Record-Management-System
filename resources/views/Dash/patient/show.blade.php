@include('dash.header')
<div class="container">
    <div class="col-sm-8">
        <form action="patient.index" method="GET">
            {{csrf_field()}}
            <div class="input-group">
                <input type="text" class="form-control" name="searchTerm" placeholder="Search for..." value="{{ isset($searchTerm) ? $searchTerm : '' }}">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </span>
            </div>
        </form>
    </div>
</div>
