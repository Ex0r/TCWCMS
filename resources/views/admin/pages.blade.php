
@extends('admin.layouts.layout')

          @section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Pages</h1>
          </div>

          <p><button class="btn btn-success">Create New Page</button></p>

          <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
              <thead>
                <tr>
                  <th><input type="checkbox"></th>
                  <th>Page Title</th>
                  <th>Author</th>
                  <th>Status</th>
                  <th>Updated</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox"></td>
                  <td><a href="/custom-page">Custom Page 1</a></td>
                  <td>jfurnas</td>
                  <td>Published</td>
                  <td>Today</td>
                  <td>Edit | Delete</td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td><a href="/custom-page/custom-page-2">Custom page 2</a></td>
                  <td>jfurnas</td>
                  <td>Published</td>
                  <td>Today</td>
                  <td>Edit | Delete</td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td><a href="/custom-page-3">Custom Page 3</a></td>
                  <td>jfurnas</td>
                  <td>Published</td>
                  <td>Today</td>
                  <td>Edit | Delete</td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td><a href="/custom-page-3/custom-page-4">Custom page 4</a></td>
                  <td>jfurnas</td>
                  <td>Published</td>
                  <td>Today</td>
                  <td>Edit | Delete</td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td><a href="/custom-page-3/custom-page-5">Custom page 5</a></td>
                  <td>jfurnas</td>
                  <td>Published</td>
                  <td>Today</td>
                  <td>Edit | Delete</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan=5>With selected: <select><option>Delete</option><option>Unpublish</option><option>Publish</option></select> <button class="btn btn-primary">Go</button></td>
                </tr>
              </tfoot>
            </table>
          </div>
@stop