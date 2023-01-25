<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $api            = env('DANS_API_URL');
        $data_api       = json_decode(file_get_contents($api));
        $total_data     = count($data_api);
        $total_page     = ceil($total_data / 10);

        $paginated_api  = $api."?page=1";
        $paginated_data = json_decode(file_get_contents($paginated_api));

        $data           = array(
            'total_page'    => $total_page,
            'jobs'          => $paginated_data
        );

        return view('home', $data);
    }
    
    public function getJobs(Request $request)
    {
        $page_requested = $request->input('page_no');
        $api            = env('DANS_API_URL');
        $paginated_api  = $api."?page=".$page_requested;
        $data_jobs      = json_decode(file_get_contents($paginated_api));

        $jobs = '
        <div class="row" id="jobs">';
        foreach ($data_jobs as $job) {
            if (!isset($job->id)) {
                continue;
            }
            $jobs .= '
            <div class="col-sm-6 mb-3">
                <div class="card">
                <div class="card-body">
                    <h2>'.$job->title.'</h2>
                    <h6 class="card-title">'.$job->company.'</h6>
                    <h6 class="card-title">'.$job->location.' - '.$job->type.'</h6>
                    <a href="#" class="btn btn-primary btn-sm"> Details </a>
                </div>
                </div>
            </div>';
        }
        $jobs .= '</div>';

        echo $jobs;
    }
}
