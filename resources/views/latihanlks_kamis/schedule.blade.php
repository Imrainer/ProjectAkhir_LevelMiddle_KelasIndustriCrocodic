<x-layout title="studio">
    <div class="d-flex">
    <x-navbarlks></x-navbarlks>
    
        <div class="container ms-5 ">
        <h1 class="text-primary"> Schedules </h1>
        <a href="/addstudio" class="btn btn-success mt-5 mb-2">+Add</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Studio</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td> 01-01-2023 </td>
                <td><a href="#" class="btn btn-warning text-light"> Edit </a></td>
                <td><a href="#" class="btn btn-danger text-light"> Delete </a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td> 01-01-2023 </td>
                <td><a href="#" class="btn btn-warning text-light"> Edit </a></td>
                <td><a href="#" class="btn btn-danger text-light"> Delete </a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td> Warner </td>
                <td> 01-01-2023 </td>
                <td><a href="#" class="btn btn-warning text-light"> Edit </a></td>
                <td><a href="#" class="btn btn-danger text-light"> Delete </a></td>
              </tr>
            </tbody>
          </table>
        </div>
    
    </div>
    </x-layout>