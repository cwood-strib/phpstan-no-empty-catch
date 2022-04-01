<?php

class Foo
{

	public function doFoo(): void
	{
		$p = new stdClass();

        try {
            $this->errorProne();
        } catch (\Exception $e) {
            
        }

	}

    public function errorProne(): void {
        throw new Exception("Failed");
    }

}