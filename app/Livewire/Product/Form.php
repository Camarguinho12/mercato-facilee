<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Doctrine\Inflector\Rules\English\Rules;
use Livewire\Component;

class Form extends Component
{
    public $category_id;
    public $object = '';
    public $price = '';
    public $about = '';

    public function rules(){
        return [
            'category_id' => 'required',
            'object' => 'string|required|min:3',
            'price' => 'required|decimal:2',
            'about' => 'required|min:10'
        ];
    }

    public function store(){
        $this->validate();

        Product::create([
            'category_id' => $this->category_id,
            'object' => $this->object,
            'price' => $this->price,
            'about' => $this->about
        ]);

        $this->cleanForm();

        session()->flash('success', 'Prodotto pubblicato');
    }

    public function cleanForm(){
        $this->category_id;
        $this->object = '';
        $this->price = '';
        $this->about = '';
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.product.form', compact('categories'));
    }
}
