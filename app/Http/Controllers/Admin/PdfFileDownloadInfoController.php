<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePdfFileDownloadInfoRequest;
use App\Http\Requests\Admin\UpdatePdfFileDownloadInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\PdfFileDownloadInfoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Flash;

class PdfFileDownloadInfoController extends AppBaseController
{
    /** @var PdfFileDownloadInfoRepository $pdfFileDownloadInfoRepository*/
    private $pdfFileDownloadInfoRepository;

    public function __construct(PdfFileDownloadInfoRepository $pdfFileDownloadInfoRepo)
    {
        $this->pdfFileDownloadInfoRepository = $pdfFileDownloadInfoRepo;
    }

    /**
     * Display a listing of the PdfFileDownloadInfo.
     */
    public function index(Request $request)
    {
        $pdfFileDownloadInfos = $this->pdfFileDownloadInfoRepository->paginate(10);

        return view('admin.pdf_file_download_infos.index')
            ->with('pdfFileDownloadInfos', $pdfFileDownloadInfos);
    }

    /**
     * Show the form for creating a new PdfFileDownloadInfo.
     */
    public function create()
    {
        return view('admin.pdf_file_download_infos.create');
    }

    /**
     * Store a newly created PdfFileDownloadInfo in storage.
     */
    public function store(CreatePdfFileDownloadInfoRequest $request)
    {
        $input = $request->all();

        $input['file'] = $this->handleFileUpload($request->file('file'), null, 'pdf');

        $pdfFileDownloadInfo = $this->pdfFileDownloadInfoRepository->create($input);

        Flash::success('Pdf File Download Info saved successfully.');

        return redirect(route('admin.pdfFileDownloadInfos.index'));
    }

    /**
     * Display the specified PdfFileDownloadInfo.
     */
    public function show($id)
    {
        $pdfFileDownloadInfo = $this->pdfFileDownloadInfoRepository->find($id);

        if (empty($pdfFileDownloadInfo)) {
            Flash::error('Pdf File Download Info not found');

            return redirect(route('admin.pdfFileDownloadInfos.index'));
        }

        return view('admin.pdf_file_download_infos.show')->with('pdfFileDownloadInfo', $pdfFileDownloadInfo);
    }

    /**
     * Show the form for editing the specified PdfFileDownloadInfo.
     */
    public function edit($id)
    {
        $pdfFileDownloadInfo = $this->pdfFileDownloadInfoRepository->find($id);

        if (empty($pdfFileDownloadInfo)) {
            Flash::error('Pdf File Download Info not found');

            return redirect(route('admin.pdfFileDownloadInfos.index'));
        }

        return view('admin.pdf_file_download_infos.edit')->with('pdfFileDownloadInfo', $pdfFileDownloadInfo);
    }

    /**
     * Update the specified PdfFileDownloadInfo in storage.
     */
    public function update($id, UpdatePdfFileDownloadInfoRequest $request)
    {
        $pdfFileDownloadInfo = $this->pdfFileDownloadInfoRepository->find($id);

        if (empty($pdfFileDownloadInfo)) {
            Flash::error('Pdf File Download Info not found');

            return redirect(route('admin.pdfFileDownloadInfos.index'));
        }

        $input = $request->all();

        $input['file'] = $this->handleFileUpload($request->file('file'), $pdfFileDownloadInfo['file'], 'pdf');

        $pdfFileDownloadInfo = $this->pdfFileDownloadInfoRepository->update($request->all(), $id);

        Flash::success('Pdf File Download Info updated successfully.');

        return redirect(route('admin.pdfFileDownloadInfos.index'));
    }

    /**
     * Remove the specified PdfFileDownloadInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pdfFileDownloadInfo = $this->pdfFileDownloadInfoRepository->find($id);

        if (empty($pdfFileDownloadInfo)) {
            Flash::error('Pdf File Download Info not found');

            return redirect(route('admin.pdfFileDownloadInfos.index'));
        }

        if (File::exists(public_path('uploads/' . $pdfFileDownloadInfo['file']))) {
            File::delete(public_path('uploads/' . $pdfFileDownloadInfo['file']));
        }

        $this->pdfFileDownloadInfoRepository->delete($id);

        Flash::success('Pdf File Download Info deleted successfully.');

        return redirect(route('admin.pdfFileDownloadInfos.index'));
    }


    function handleFileUpload($newFile, $existingFilePath = null, $uploadDir)
    {
        if ($newFile) {
            $path = public_path('uploads/files/' . $uploadDir . '/');
            $filename = time() . '_' . $newFile->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有檔案，刪除舊檔案
            if (!empty($existingFilePath) && File::exists(public_path('uploads/' . $existingFilePath))) {
                File::delete(public_path('uploads/' . $existingFilePath));
            }

            // 移動檔案到指定目錄
            $newFile->move($path, $filename);

            return 'files/' . $uploadDir . '/' . $filename;
        }

        // 若無新檔案，返回舊檔案路徑
        return $existingFilePath;
    }
}
