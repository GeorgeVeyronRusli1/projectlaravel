<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BookCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BookCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        CRUD::setModel(Book::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/book');
        CRUD::setEntityNameStrings('book', 'books');
    }

    protected function setupListOperation()
    {
        CRUD::column('id')->label('ID');
        CRUD::column('title')->label('Title');
        CRUD::column('author')->label('Author');
        CRUD::column('publication_year')->label('Publication Year');
        CRUD::column('description')->label('Description')->type('textarea')->limit(50);
    }

    protected function setupShowOperation()
    {
        CRUD::column('id')->label('ID');
        CRUD::column('title')->label('Title');
        CRUD::column('author')->label('Author');
        CRUD::column('publication_year')->label('Publication Year');
        CRUD::column('description')->label('Description');
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(BookRequest::class);

        CRUD::addField([
            'name'  => 'title',
            'label' => 'Title',
            'type'  => 'text',
        ]);

        CRUD::addField([
            'name'  => 'author',
            'label' => 'Author',
            'type'  => 'text',
        ]);

        CRUD::addField([
            'name'  => 'publication_year',
            'label' => 'Publication Year',
            'type'  => 'number',
            'attributes' => ['min' => 1900, 'max' => date('Y')],
        ]);

        CRUD::addField([
            'name'  => 'description',
            'label' => 'Description',
            'type'  => 'textarea',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
