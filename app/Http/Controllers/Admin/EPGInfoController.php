<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateEPGInfoRequest;
use App\Http\Requests\Admin\UpdateEPGInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\EPGInfoRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Flash;

class EPGInfoController extends AppBaseController
{
    /** @var EPGInfoRepository $ePGInfoRepository*/
    private $ePGInfoRepository;

    public function __construct(EPGInfoRepository $ePGInfoRepo)
    {
        $this->ePGInfoRepository = $ePGInfoRepo;
    }

    /**
     * Display a listing of the EPGInfo.
     */
    public function index(Request $request)
    {
        $ePGInfos = $this->ePGInfoRepository->paginate(10);

        return view('admin.e_p_g_infos.index')
            ->with('ePGInfos', $ePGInfos);
    }

    /**
     * Show the form for creating a new EPGInfo.
     */
    public function create()
    {
        return view('admin.e_p_g_infos.create');
    }

    /**
     * Store a newly created EPGInfo in storage.
     */
    public function store(CreateEPGInfoRequest $request)
    {
        $input = $request->all();

        $input['epg_img'] = $this->processImage($request->file('epg_img'), 'epg_img');

        $ePGInfo = $this->ePGInfoRepository->create($input);

        Flash::success('E P G Info saved successfully.');

        return redirect(route('admin.ePGInfos.index'));
    }

    /**
     * Display the specified EPGInfo.
     */
    public function show($id)
    {
        $ePGInfo = $this->ePGInfoRepository->find($id);

        if (empty($ePGInfo)) {
            Flash::error('E P G Info not found');

            return redirect(route('admin.ePGInfos.index'));
        }

        return view('admin.e_p_g_infos.show')->with('ePGInfo', $ePGInfo);
    }

    /**
     * Show the form for editing the specified EPGInfo.
     */
    public function edit($id)
    {
        $ePGInfo = $this->ePGInfoRepository->find($id);

        if (empty($ePGInfo)) {
            Flash::error('E P G Info not found');

            return redirect(route('admin.ePGInfos.index'));
        }

        return view('admin.e_p_g_infos.edit')->with('ePGInfo', $ePGInfo);
    }

    /**
     * Update the specified EPGInfo in storage.
     */
    public function update($id, UpdateEPGInfoRequest $request)
    {
        $ePGInfo = $this->ePGInfoRepository->find($id);

        if (empty($ePGInfo)) {
            Flash::error('E P G Info not found');

            return redirect(route('admin.ePGInfos.index'));
        }

        $input = $request->all();

        $input['epg_img'] = $this->handleImageUpload($request->file('epg_img'), $ePGInfo['epg_img'], 'epg_img');

        $ePGInfo = $this->ePGInfoRepository->update($input, $id);

        Flash::success('E P G Info updated successfully.');

        return redirect(route('admin.ePGInfos.index'));
    }

    /**
     * Remove the specified EPGInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ePGInfo = $this->ePGInfoRepository->find($id);

        if (empty($ePGInfo)) {
            Flash::error('E P G Info not found');

            return redirect(route('admin.ePGInfos.index'));
        }

        if (File::exists(public_path('uploads/' . $ePGInfo['epg_img']))) {
            File::delete(public_path('uploads/' . $ePGInfo['epg_img']));
        }

        $this->ePGInfoRepository->delete($id);

        Flash::success('E P G Info deleted successfully.');

        return redirect(route('admin.ePGInfos.index'));
    }

    // 共用的圖片處理函式
    function processImage($image, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($image) {
            $path = public_path('uploads/images/' . $uploadDir) . '/';
            $filename = time() . '_' . $image->getClientOriginalName();

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        return '';
    }

    // 共用圖片處理函式
    function handleImageUpload($newImage, $existingImagePath, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($newImage) {
            $path = public_path('uploads/images/' . $uploadDir . '/');
            $filename = time() . '_' . $newImage->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有圖片，刪除舊圖片
            if (!empty($existingImagePath) && File::exists(public_path('uploads/' . $existingImagePath))) {
                File::delete(public_path('uploads/' . $existingImagePath));
            }

            // 壓縮並保存新圖片
            $image = Image::make($newImage)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        // 若無新圖片，返回舊圖片路徑
        return $existingImagePath;
    }
}
