<div>
    <ul class="list-disc">
        <li>
            {{$this->job->job_title}}
        </li>
        <li>
            {{$this->job->job_location}}
        </li>
        <li>
            {{$this->job->job_type}}
        </li>
        <li>
            {{$this->job->employ_type}}
        </li>
        <li>
            {{$this->job->salary}}
        </li>
        <li>
            {{$this->job->company_name}}
        </li>
        <li>
            {{$this->job->company_logo_path ?? 'jaskl;jf'}}
        </li>
        
        <li>
            {{$this->job->job_description}}
        </li>
        <li>
            {{$this->job->application}}
        </li>
    </ul>
</div>
