<?php

namespace App\Http\Controllers;

use App\Models\Java;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JavaController extends Controller
{
    //
    public function index(): View
    {
        //get posts
        $javas = Java::latest()->paginate(5);
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        //render view with posts
        return view('java.index', compact('javas'));
    }
    public function create(): View
    {
        return view('java.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:20048',
            'title'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/java', $image->hashName());

        //create post
        Java::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'deskripsi'   => $request->deskripsi,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('java.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit(string $id): View
    {
        //get post by ID
        $javas = Java::findOrFail($id);

        //render view with post
        return view('java.edit', compact('javas'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'content'   => 'required|min:10'
        ]);

        //get post by ID
        $javas = Java::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/java', $image->hashName());

            //delete old image
            Storage::delete('public/java/' . $javas->image);

            //update post with new image
            $javas->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content
            ]);
        } else {

            //update post without image
            $javas->update([
                'title'     => $request->title,
                'deskripsi'   => $request->deskripsi,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('java.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $javas = Java::findOrFail($id);

        //delete image
        Storage::delete('public/java/' . $javas->image);

        //delete post
        $javas->delete();

        //redirect to index
        return redirect()->route('java.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
