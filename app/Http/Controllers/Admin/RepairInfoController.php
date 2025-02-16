<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateRepairInfoRequest;
use App\Http\Requests\Admin\UpdateRepairInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\RepairInfoRepository;
use Illuminate\Http\Request;
use Flash;

class RepairInfoController extends AppBaseController
{
    /** @var RepairInfoRepository $repairInfoRepository*/
    private $repairInfoRepository;

    public function __construct(RepairInfoRepository $repairInfoRepo)
    {
        $this->repairInfoRepository = $repairInfoRepo;
    }

    /**
     * Display a listing of the RepairInfo.
     */
    public function index(Request $request)
    {
        $repairInfos = $this->repairInfoRepository->paginate(10);

        return view('admin.repair_infos.index')
            ->with('repairInfos', $repairInfos);
    }

    /**
     * Show the form for creating a new RepairInfo.
     */
    public function create()
    {
        return view('admin.repair_infos.create');
    }

    /**
     * Store a newly created RepairInfo in storage.
     */
    public function store(CreateRepairInfoRequest $request)
    {
        $input = $request->all();

        $repairInfo = $this->repairInfoRepository->create($input);

        Flash::success('Repair Info saved successfully.');

        return redirect(route('admin.repairInfos.index'));
    }

    /**
     * Display the specified RepairInfo.
     */
    public function show($id)
    {
        $repairInfo = $this->repairInfoRepository->find($id);

        if (empty($repairInfo)) {
            Flash::error('Repair Info not found');

            return redirect(route('admin.repairInfos.index'));
        }

        return view('admin.repair_infos.show')->with('repairInfo', $repairInfo);
    }

    /**
     * Show the form for editing the specified RepairInfo.
     */
    public function edit($id)
    {
        $repairInfo = $this->repairInfoRepository->find($id);

        if (empty($repairInfo)) {
            Flash::error('Repair Info not found');

            return redirect(route('admin.repairInfos.index'));
        }

        return view('admin.repair_infos.edit')->with('repairInfo', $repairInfo);
    }

    /**
     * Update the specified RepairInfo in storage.
     */
    public function update($id, UpdateRepairInfoRequest $request)
    {
        $repairInfo = $this->repairInfoRepository->find($id);

        if (empty($repairInfo)) {
            Flash::error('Repair Info not found');

            return redirect(route('admin.repairInfos.index'));
        }

        $repairInfo = $this->repairInfoRepository->update($request->all(), $id);

        Flash::success('Repair Info updated successfully.');

        return redirect(route('admin.repairInfos.index'));
    }

    /**
     * Remove the specified RepairInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $repairInfo = $this->repairInfoRepository->find($id);

        if (empty($repairInfo)) {
            Flash::error('Repair Info not found');

            return redirect(route('admin.repairInfos.index'));
        }

        $this->repairInfoRepository->delete($id);

        Flash::success('Repair Info deleted successfully.');

        return redirect(route('admin.repairInfos.index'));
    }
}
