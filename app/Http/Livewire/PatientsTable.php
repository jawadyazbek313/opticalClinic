<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\Rule;

final class PatientsTable extends PowerGridComponent
{
    use ActionButton;

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = true;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): void
    {
        $this->showCheckBox()
            ->showPerPage()
            ->showSearchInput()
            ->showExportOption('download', ['excel', 'csv']);
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
    * PowerGrid datasource.
    *
    * @return  \Illuminate\Database\Eloquent\Builder<\App\Models\Patient>|null
    */
    public function datasource(): ?Builder
    {
        return Patient::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('id')
            ->addColumn('firstname')
            ->addColumn('midname')
            ->addColumn('lastname')
            ->addColumn('dob')
            ->addColumn('insurance')
            // ->addColumn('gender')
            // ->addColumn('bloodtype')
            // ->addColumn('diag')
            // ->addColumn('job')
            // ->addColumn('address')
            // ->addColumn('number')
            // ->addColumn('maincomplaint')
            // ->addColumn('pathological_story')
            // ->addColumn('OD_VA')
            // ->addColumn('OD_AUTO')
            // ->addColumn('OD_BCVA_FAR')
            // ->addColumn('OD_NEAR')
            // ->addColumn('OD_AUTO_AFTER_CYCLO')
            // ->addColumn('OD_BUT')
            // ->addColumn('OD_IOP')
            // ->addColumn('OD_LIDS')
            // ->addColumn('OD_CORNEA')
            // ->addColumn('OD_CONJUNCTIVA')
            // ->addColumn('OD_IRIS')
            // ->addColumn('OD_AC')
            // ->addColumn('OD_LENS')
            // ->addColumn('OD_VITREOUS')
            // ->addColumn('OD_CD')
            // ->addColumn('OD_FUNDUS')
            // ->addColumn('OS_VA')
            // ->addColumn('OS_AUTO')
            // ->addColumn('OS_BCVA_FAR')
            // ->addColumn('OS_NEAR')
            // ->addColumn('OS_AUTO_AFTER_CYCLO')
            // ->addColumn('OS_BUT')
            // ->addColumn('OS_IOP')
            // ->addColumn('OS_LIDS')
            // ->addColumn('OS_CORNEA')
            // ->addColumn('OS_CONJUNCTIVA')
            // ->addColumn('OS_IRIS')
            // ->addColumn('OS_AC')
            // ->addColumn('OS_LENS')
            // ->addColumn('OS_VITREOUS')
            // ->addColumn('OS_CD')
            // ->addColumn('OS_FUNDUS')
            // ->addColumn('created_at_formatted', function(Patient $model) { 
            //     return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
            // })
            // ->addColumn('updated_at_formatted', function(Patient $model) { 
            //     return Carbon::parse($model->updated_at)->format('d/m/Y H:i:s');
            // })
            ;
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::add()
                ->title('ID')
                ->field('id')
                ->makeInputRange(),

            Column::add()
                ->title('ID')
                ->field('id')
                ->makeInputRange(),

            Column::add()
                ->title('FIRSTNAME')
                ->field('firstname')
                ->sortable()
                ->searchable()
                ->makeInputText()
                ->editOnClick(),

            Column::add()
                ->title('MIDNAME')
                ->field('midname')
                ->sortable()
                ->searchable()
                ->makeInputText()
                ->editOnClick(),

            Column::add()
                ->title('LASTNAME')
                ->field('lastname')
                ->sortable()
                ->searchable()
                ->makeInputText()
                ->editOnClick(),


            Column::add()
                ->title('DOB')
                ->field('dob')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('INSURANCE')
                ->field('insurance')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            // Column::add()
            //     ->title('GENDER')
            //     ->field('gender')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('BLOODTYPE')
            //     ->field('bloodtype')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('DIAG')
            //     ->field('diag')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('JOB')
            //     ->field('job')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('ADDRESS')
            //     ->field('address')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('NUMBER')
            //     ->field('number')
            //     ->sortable()
            //     ->searchable()
            //     ->makeInputText(),

            // Column::add()
            //     ->title('MAINCOMPLAINT')
            //     ->field('maincomplaint')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('PATHOLOGICAL STORY')
            //     ->field('pathological_story')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD VA')
            //     ->field('OD_VA')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD AUTO')
            //     ->field('OD_AUTO')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD BCVA FAR')
            //     ->field('OD_BCVA_FAR')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD NEAR')
            //     ->field('OD_NEAR')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD AUTO AFTER CYCLO')
            //     ->field('OD_AUTO_AFTER_CYCLO')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD BUT')
            //     ->field('OD_BUT')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD IOP')
            //     ->field('OD_IOP')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD LIDS')
            //     ->field('OD_LIDS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD CORNEA')
            //     ->field('OD_CORNEA')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD CONJUNCTIVA')
            //     ->field('OD_CONJUNCTIVA')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD IRIS')
            //     ->field('OD_IRIS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD AC')
            //     ->field('OD_AC')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD LENS')
            //     ->field('OD_LENS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD VITREOUS')
            //     ->field('OD_VITREOUS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD CD')
            //     ->field('OD_CD')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OD FUNDUS')
            //     ->field('OD_FUNDUS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS VA')
            //     ->field('OS_VA')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS AUTO')
            //     ->field('OS_AUTO')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS BCVA FAR')
            //     ->field('OS_BCVA_FAR')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS NEAR')
            //     ->field('OS_NEAR')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS AUTO AFTER CYCLO')
            //     ->field('OS_AUTO_AFTER_CYCLO')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS BUT')
            //     ->field('OS_BUT')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS IOP')
            //     ->field('OS_IOP')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS LIDS')
            //     ->field('OS_LIDS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS CORNEA')
            //     ->field('OS_CORNEA')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS CONJUNCTIVA')
            //     ->field('OS_CONJUNCTIVA')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS IRIS')
            //     ->field('OS_IRIS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS AC')
            //     ->field('OS_AC')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS LENS')
            //     ->field('OS_LENS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS VITREOUS')
            //     ->field('OS_VITREOUS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS CD')
            //     ->field('OS_CD')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('OS FUNDUS')
            //     ->field('OS_FUNDUS')
            //     ->sortable()
            //     ->searchable(),

            // Column::add()
            //     ->title('CREATED AT')
            //     ->field('created_at_formatted', 'created_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker('created_at'),

            // Column::add()
            //     ->title('UPDATED AT')
            //     ->field('updated_at_formatted', 'updated_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker('updated_at'),

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid Patient Action Buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::add('edit')
               ->caption('Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('patient.edit', ['patient' => 'id']),

           Button::add('destroy')
               ->caption('Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('patient.destroy', ['patient' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Patient Action Rules.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Rules\RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [
           
           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($patient) => $patient->id === 1)
                ->hide(),
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable the method below to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */

     /**
     * PowerGrid Patient Update.
     *
     * @param array<string,string> $data
     */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Patient::query()->findOrFail($data['id'])
                ->update([
                    $data['field'] => $data['value'],
                ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status = 'error', string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field'   => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field'   => __('Error updating custom field.'),
            ]
        ];

        $message = ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);

        return (is_string($message)) ? $message : 'Error!';
    }
    */
}
