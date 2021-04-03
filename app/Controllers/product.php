<?php
class product extends DkController
{
    public function __construct()
    {
        // parent::__construct();
    }

    public function show($id, $slug)
    {
        echo "chi tiet san pham";
        echo $id;
        echo $slug;
    }
}

