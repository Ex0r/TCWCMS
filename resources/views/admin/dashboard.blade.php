
@extends('admin.layouts.layout')

          @section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
            </div>
          </div>

          <h2>Alliance vs Horde Demographic</h2>
          <p>The chart below shows the ratio of Horde to Alliance on the selected server. Data is representative as of <strong>{{ date('m-d-Y',time()) }}</strong>.</p>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          <h2>Players Online</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
              <thead>
                <tr>
                  <th>Character Name</th>
                  <th>Level</th>
                  <th>Location</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/admin/characters/Juthien/view">Juthien</a> <span class="icon icon-human" title="Human"></span> <span class="icon icon-hunter" title="Hunter"></span></td>
                  <td>5</td>
                  <td>Elywnn Forest</td>
                </tr>
                <tr>
                  <td><a href="/admin/characters/Kleetis/view">Kleetis</a> <span class="icon icon-night-elf" title="Night Elf"></span> <span class="icon icon-druid" title="Druid"></span></td>
                  <td>1</td>
                  <td>Teldrassil</td>
                </tr>
                <tr>
                  <td><a href="/admin/characters/Orcyou/view">Orcyou</a> <span class="icon icon-orc" title="Orc"></span> <span class="icon icon-paladin" title="Paladin"></span></td>
                  <td>20</td>
                  <td>Orgrimmar</td>
                </tr>
              </tbody>
            </table>
          </div>
@stop