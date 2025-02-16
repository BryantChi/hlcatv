<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateLatestAnnouncementsInfoRequest;
use App\Http\Requests\Admin\UpdateLatestAnnouncementsInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\LatestAnnouncementsInfoRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Flash;

class LatestAnnouncementsInfoController extends AppBaseController
{
    /** @var LatestAnnouncementsInfoRepository $latestAnnouncementsInfoRepository*/
    private $latestAnnouncementsInfoRepository;

    public function __construct(LatestAnnouncementsInfoRepository $latestAnnouncementsInfoRepo)
    {
        $this->latestAnnouncementsInfoRepository = $latestAnnouncementsInfoRepo;
    }

    /**
     * Display a listing of the LatestAnnouncementsInfo.
     */
    public function index(Request $request)
    {
        $latestAnnouncementsInfos = $this->latestAnnouncementsInfoRepository->paginate(10);

        return view('admin.latest_announcements_infos.index')
            ->with('latestAnnouncementsInfos', $latestAnnouncementsInfos);
    }

    /**
     * Show the form for creating a new LatestAnnouncementsInfo.
     */
    public function create()
    {
        return view('admin.latest_announcements_infos.create');
    }

    /**
     * Store a newly created LatestAnnouncementsInfo in storage.
     */
    public function store(CreateLatestAnnouncementsInfoRequest $request)
    {
        $input = $request->all();

        dd($request->all());

        $input['cover_front_image'] = $this->processImage($request->file('cover_front_image'), 'cover_front_image');

        $latestAnnouncementsInfo = $this->latestAnnouncementsInfoRepository->create($input);

        Flash::success('Latest Announcements Info saved successfully.');

        return redirect(route('admin.latestAnnouncementsInfos.index'));
    }

    /**
     * Display the specified LatestAnnouncementsInfo.
     */
    public function show($id)
    {
        $latestAnnouncementsInfo = $this->latestAnnouncementsInfoRepository->find($id);

        if (empty($latestAnnouncementsInfo)) {
            Flash::error('Latest Announcements Info not found');

            return redirect(route('admin.latestAnnouncementsInfos.index'));
        }

        return view('admin.latest_announcements_infos.show')->with('latestAnnouncementsInfo', $latestAnnouncementsInfo);
    }

    /**
     * Show the form for editing the specified LatestAnnouncementsInfo.
     */
    public function edit($id)
    {
        $latestAnnouncementsInfo = $this->latestAnnouncementsInfoRepository->find($id);

        if (empty($latestAnnouncementsInfo)) {
            Flash::error('Latest Announcements Info not found');

            return redirect(route('admin.latestAnnouncementsInfos.index'));
        }

        return view('admin.latest_announcements_infos.edit')->with('latestAnnouncementsInfo', $latestAnnouncementsInfo);
    }

    /**
     * Update the specified LatestAnnouncementsInfo in storage.
     */
    public function update($id, UpdateLatestAnnouncementsInfoRequest $request)
    {
        $latestAnnouncementsInfo = $this->latestAnnouncementsInfoRepository->find($id);

        if (empty($latestAnnouncementsInfo)) {
            Flash::error('Latest Announcements Info not found');

            return redirect(route('admin.latestAnnouncementsInfos.index'));
        }

        $input = $request->all();

        $input['cover_front_image'] = $this->handleImageUpload($request->file('cover_front_image'), $latestAnnouncementsInfo['cover_front_image'], 'cover_front_image');

        $latestAnnouncementsInfo = $this->latestAnnouncementsInfoRepository->update($request->all(), $id);

        Flash::success('Latest Announcements Info updated successfully.');

        return redirect(route('admin.latestAnnouncementsInfos.index'));
    }

    /**
     * Remove the specified LatestAnnouncementsInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $latestAnnouncementsInfo = $this->latestAnnouncementsInfoRepository->find($id);

        if (empty($latestAnnouncementsInfo)) {
            Flash::error('Latest Announcements Info not found');

            return redirect(route('admin.latestAnnouncementsInfos.index'));
        }

        $this->latestAnnouncementsInfoRepository->delete($id);

        Flash::success('Latest Announcements Info deleted successfully.');

        return redirect(route('admin.latestAnnouncementsInfos.index'));
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
