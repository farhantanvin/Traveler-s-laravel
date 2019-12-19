@extends('travel_agency.layout')
  @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Offer Events</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-signin my-4">
            <div class="card-body">
              <form class="form-signin" method="post">
                <div class="form-label-group my-4">
                  <input type="text" id="inputTittle" name="inputTittle" class="form-control" placeholder="Tittle" required>
                  <label for="inputTittle">Tittle</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="text" id="inputAgency" name="inputAgency" class="form-control" placeholder="Agency Name" required>
                  <label for="inputAgency">Agency Name</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="text" id="inputPlace" name="inputPlace" class="form-control" placeholder="Place" required>
                  <label for="inputPlace">Place</label>
                </div>

                <div class="form-label-group my-4">
                  <input type="date" id="inputDate" name="inputDate" min="today" class="form-control" placeholder="Email address" required>
                  <label for="inputDate">Date</label>
                 </div>

                <div class="form-label-group my-4">
                  <input type="text" id="inputDuration" name="inputDuration" class="form-control" placeholder="Duration" required>
                  <label for="inputDuration">Duration</label>
                </div>

                <div class="form-label-group my-4">
                  <textarea class="form-control" id="inputDescription" name="inputDescription" placeholder="Description" required></textarea>
                  <label for="inputDescription"></label>
                </div>

                <div class="form-label-group my-4">
                  <input type="text" id="inputPerson" name="inputPerson" class="form-control" placeholder="Person Capacity" required>
                  <label for="inputPerson">Person Capacity</label>
                </div>
                
                <div class="form-label-group my-4">
                  <input type="text" id="inputCost" name="inputCost" class="form-control" placeholder="Cost Per Person" required>
                  <label for="inputCost">Cost Per Person</label>
                </div>

                <div class="form-label-group my-4">
                  <input id="inputImage" name="inputImage" class="form-control" type="file" style="height: 65px, width=100px">
                </div>
                <button class="btn btn-lg btn-block my-4" type="submit">Post</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

@section('title')
Offer Events
@endsection