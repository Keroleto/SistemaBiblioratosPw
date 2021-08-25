<?php

class ResolverPágina
{

    public function resolver($nombreDelMódulo)
    {
        if (empty($nombreDelMódulo)) {
            $nombreDelMódulo = "inicio";
        }

        return "views/modules/" . $nombreDelMódulo . ".php";
    }

}
