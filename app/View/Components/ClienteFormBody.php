<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ClienteFormBody extends Component
{
    private $cliente;
    /**
     * Create a new component instance.
     * @param \App\Models\Cliente $cliente
     * @return void
     */
    public function __construct()
    {
        $this->tarea = $tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'cliente' => $this->cliente,
        ];
        return view('components.cliente-form-body', $params);
    }
}
