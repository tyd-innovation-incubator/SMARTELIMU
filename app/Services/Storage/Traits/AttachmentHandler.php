<?php

namespace App\Services\Storage\Traits;

use App\Exceptions\GeneralException;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait AttachmentHandler {



    protected function checkExcel($extension) {
        if ($extension == 'xls'|| $extension == 'xlsx') {
            return $extension; // Allowed proceed
        }
        throw new GeneralException("error: " . trans('exceptions.backend.finance.receipt_codes.linked_file_not_allowed'));
    }





    public function saveDocument(Model $model, $document_file_name ,$path,$uploadedDocument)
    {
        if (request()->hasFile($document_file_name)) {
            $file = request()->file($document_file_name);
            if ($file->isValid()) {
                $uploadedDocument->name = $file->getClientOriginalName();
                $uploadedDocument->size = $file->getSize();
                $uploadedDocument->mime = $file->getMimeType();
                $uploadedDocument->ext = $file->getClientOriginalExtension();
                $uploadedDocument->save();
                $this->makeDocumentDirectory($model);
                $file->move($path , $uploadedDocument->id  . "." . $file->getClientOriginalExtension());
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }



    public function saveMultipleDocuments(Model $model, $document_file_name ,$path,$uploadedDocument, $x)
    {
        if (request()->hasFile($document_file_name)) {
            $file = request()->file($document_file_name)[$x];
            if ($file->isValid()) {
                /*$file = request()->file($document_file_name)[$x];*/
                $uploadedDocument->name = $file->getClientOriginalName();
                $uploadedDocument->size = $file->getSize();
                $uploadedDocument->mime = $file->getMimeType();
                $uploadedDocument->ext = $file->getClientOriginalExtension();
                $uploadedDocument->save();
                $this->makeDocumentDirectory($model);
                $file->move($path , $uploadedDocument->id  . "." . $file->getClientOriginalExtension());
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }







    public function deleteDocument($filename){
//        FIlename in full path

        Storage::delete($filename);
    }

    public function deleteDirectory($directory_name){
//        Directory in full path

        Storage::deleteDirectory($directory_name);
    }


    /**
     * @param $path
     * Delete all files on the folder of give path
     */
    public function deleteAllFilesOnFolder($path)
    {
        $folder = $path;
        $files = glob($folder . '/*');
        foreach($files as $file){
            //Make sure that this is a file and not a directory.
            if(is_file($file)){
                //Use the unlink function to delete the file.
                unlink($file);
            }
        }
    }

    /**
     * @return array
     */
    public function saveHsCode()
    {
        $return = ['success' => false, 'attachment' => NULL];
        if (request()->hasFile('hscode_file')) {
            $file = request()->file('hscode_file');
            if ($file->isValid()) {
                //Check the excel file
                $attachment = "file" . "." . $file->getClientOriginalExtension();
                $file->move(hscode_dir(), $attachment);
                $return = ['success' => true, 'attachment' => $attachment];
            }
        }
        return $return;
    }

    /**
     * @return array
     */
    public function saveManifest()
    {
        $return = ['success' => false, 'attachment' => NULL];
        if (request()->hasFile('manifest_file')) {
            $file = request()->file('manifest_file');
            if ($file->isValid()) {
                //Check the excel file
                $attachment = "file" . "." . $file->getClientOriginalExtension();
                $specific_name = time();
                $file->move(manifest_dir(), $attachment);
                $return = ['success' => true, 'attachment' => $attachment, 'specific_name' => $specific_name];
            }
        }
        return $return;
    }


}
