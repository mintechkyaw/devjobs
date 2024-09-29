{{-- <div>
    <ul class="list-disc">
        <li>
            job_title - {{$this->job->job_title}}
        </li>
        <li>
            job_location - {{$this->job->job_location}}
        </li>
        <li>
            job_type - {{$this->job->job_type}}
        </li>
        <li>
            employ_type - {{$this->job->employ_type}}
        </li>
        <li>
            salary - {{$this->job->salary}}
        </li>
        <li>
            company_name - {{$this->job->company_name}}
        </li>
        <li>
            company_logo_path - {{$this->job->company_logo_path ?? 'jaskl;jf'}}
        </li>
        <li>
            job_description - {{$this->job->job_description}}
        </li>
        <li>
            application - {{$this->job->application}}
        </li>
        <li>
            featured - {{$this->job->featured}}
        </li>
    </ul>
</div> --}}

<div>
    @dd($this->job->toArray())
</div>