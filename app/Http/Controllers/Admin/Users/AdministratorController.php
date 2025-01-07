<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdministratorController extends Controller
{
    /**
     * Returns view of table list page
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('admin.pages.examples.users.administrator.index');
    }

    /**
     * Returns view of forms page
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $form = [
            'action' => route('example.users.administrator.store'),
            'editable' => false,
        ];

        return view('admin.pages.examples.users.administrator.create', compact('form'));
    }

    /**
     * Store records to the database
     *
     * @param StoreUserRequest $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Showing the detail of the record
     *
     * @param string|int $id
     * @return RedirectResponse
     */
    public function show(string|int $id): View|RedirectResponse
    {
        return view('admin.pages.examples.users.administrator.detail');
    }

    /**
     * Showing the detail of the record
     *
     * @param string|int $id
     * @return RedirectResponse
     */
    public function edit(string|int $id): View|RedirectResponse
    {
        $form = [
            'action' => route('example.users.administrator.update', $id),
            'editable' => false,
        ];

        return view('admin.pages.examples.users.administrator.edit', compact('form'));
    }

    /**
     * Updating specific record from the database
     *
     * @param UpdateUserRequest $request
     * @param string|int $id
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, string|int $id): RedirectResponse
    {
        //
    }

    /**
     * Destroy specific record from the database
     *
     * @param string|int $id
     * @return RedirectResponse
     */
    public function destroy(string|int $id): RedirectResponse
    {
        //
    }
}
