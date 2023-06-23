@extends('layouts.frontend.master')
@section('pageTitle',"Home")
@section('contain')
<div class="main-container container">
    <div class="row text-bg-color ">
      <div class="col-md-12 text-center text1">
       <p>Welcome To Food Care Management System</p>
      </div>
      <div class="col-12 mt-2 mb-1 text-justify">
        <p><b>Food Care</b> refers to the decrease in the quantity or quality of food resulting from decisions and anction by retailers, food sevice providers and consumers.Food is wasted in many ways.</p>
      </div>
      <div class="col-12 mt-1 mb-1 text-justify">
        <p> Fresh produce that deviates from what is considered optimal, for example in terms of shape, size and color, is often removed from the supply chain during sorting operations.</p>
    </div>
      <div class="col-12 mt-1 mb-1 text-justify">
        <p>Large quantities of wholesome edible food are often unused or left over and discarded from household kitchens and eating establishments.</p>
      </div>
      <div class="col-12 mt-1 mb-1 text-justify">
        Less food loss and waste would lead to more efficient land use and better water resource management with positive impacts on climate change and livelihoods.
    </div>
    </div>

    <div class="row">
      <div class="row pt-50 pb-50">
        <div class="col-md-12 text-center">
            <h2 class="bolder-txt text-center">Our <span class="bg-purple text-center px-2 text-light">Mission</span></h2>
        </div>
        <div class="col-md-12 mt-50">
            <div class="row mission-cards mission-row">
                <div class="col-md-4 col-12">
                    <div class="container mission-cards py-3 shadow">
                        <div class="col-md-12 text-center my-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-gear-fill color-purple" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                            </svg>
                        </div>
                        <div class="col-md-12">
                            <h3 class="text-center">Action</h3>
                            <p class="text-black-50 text-justify mt-3">
                                To feed the needy and hungry with untouchable edible surplus food.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="container mission-cards py-3 shadow">
                        <div class="col-md-12 text-center my-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-break-fill color-purple" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V9H2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM2 12h12v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z"></path>
                            </svg>
                        </div>
                        <div class="col-md-12">
                            <h3 class="text-center">Audit Methods</h3>
                            <p class="text-black-50 text-justify mt-3">
                                To sensitize people about the amount of food being wasted through standardized food
                                waste auditing methods.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="container mission-cards py-3 shadow">
                        <div class="col-md-12 text-center my-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-break-fill color-purple" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V9H2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM2 12h12v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z"></path>
                            </svg>
                        </div>
                        <div class="col-md-12">
                            <h3 class="text-center">Alternative Solution</h3>
                            <p class="text-black-50 text-justify mt-3">
                                To feed the needy and hungry with untouchable edible surplus food.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-50 mission-cards justify-content-center">
                <div class="col-md-4 col-12">
                    <div class="container  mission-cards py-3 shadow">
                        <div class="col-md-12 text-center my-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-break-fill color-purple" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V9H2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM2 12h12v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z"></path>
                            </svg>
                        </div>
                        <div class="col-md-12">
                            <h3 class="text-center">Citizen</h3>
                            <p class="text-black-50 text-justify mt-3">
                                To raise awareness about food loss and food waste amongst citizens and bring about
                                behavioral change in them to prevent food waste at home, school or at workplace
                                through guidance and sharing of good practices
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="container mission-cards py-3 shadow">
                        <div class="col-md-12 text-center my-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-break-fill color-purple" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V9H2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM2 12h12v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z"></path>
                            </svg>
                        </div>
                        <div class="col-md-12">
                            <h3 class="text-center">Food Solution</h3>
                            <p class="text-black-50 text-justify mt-3">
                                To raise awareness among Food businesses by encouraging them to adopt good practices
                                to reduce food loss and food waste in their supply chains and sharing good practices
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
  
</div>
@endsection
