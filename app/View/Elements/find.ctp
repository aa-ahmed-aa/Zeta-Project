<?php
    foreach($problems as $problem)
    {
        $a[$problem['Problem']['id']] =  $problem['Problem']['name'];
    }

    echo $this->Form->input('problem_id', array(
        'value' => isset($problem_id) ? $problem_id : '' ,
        'options' => $a,
        'empty' => '(choose Problem)'
    ));
?>