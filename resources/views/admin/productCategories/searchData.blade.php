<table class="table table-striped table-bordered table-hover table-md">
    <thead class="w3-small text-muted thead-light">
        <tr>
            <th width="30">SL</th>
            <th width="60">Action</th>
            <th>Category Name (English)</th>
            <th>Category Name (Bangla)</th>
            <th>Image</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        <?php $i = (($categories->currentPage() - 1) * $categories->perPage() + 1); ?>

        @forelse ($categories as $category)

            {{-- ================= MAIN MENU ================= --}}
            <tr class="bg-light">
                <td>{{ $i++ }}</td>

                <td>
                    <div class="dropdown show">
                        <a class="btn btn-primary btn-xs dropdown-toggle"
                           href="#"
                           data-toggle="dropdown">
                            Action
                        </a>

                        <div class="dropdown-menu">
                            <a href="{{ route('admin.productCategoryEdit',$category) }}"
                               class="dropdown-item">
                                <i class="fa fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.productCategoryDelete',$category) }}"
                                  method="post"
                                  onclick="return confirm('Are you sure to delete?')">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </td>

                <td>
                    <strong>{{ Str::limit($category->name_en,30) }}</strong>
                    <span class="badge badge-primary ml-1">Menu</span>
                </td>

                <td>{{ Str::limit($category->name_bn,30) }}</td>

                <td>
                    <img width="30" height="20"
                         src="{{ route('imagecache',['template'=>'sbixs','filename'=>$category->fi()]) }}">
                </td>

                <td>
                    @if($category->active == 1)
                        <button class="badge border-0 badge-primary categoryStatus"
                            data-url="{{ route('admin.categoryStatus',['category'=>$category->id]) }}">
                            Active
                        </button>
                    @else
                        <button class="badge border-0 badge-danger categoryStatus"
                            data-url="{{ route('admin.categoryStatus',['category'=>$category->id]) }}">
                            Inactive
                        </button>
                    @endif
                </td>
            </tr>



            {{-- ================= SUB MENU ================= --}}
            @foreach($category->children as $child)

                <tr>
                    <td></td>

                    <td>
                        <div class="dropdown show">
                            <a class="btn btn-secondary btn-xs dropdown-toggle"
                               href="#"
                               data-toggle="dropdown">
                                Action
                            </a>

                            <div class="dropdown-menu">
                                <a href="{{ route('admin.productCategoryEdit',$child) }}"
                                   class="dropdown-item">
                                    <i class="fa fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('admin.productCategoryDelete',$child) }}"
                                      method="post"
                                      onclick="return confirm('Are you sure to delete?')">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>

                    <td>
                        &nbsp;&nbsp;&nbsp;↳ {{ Str::limit($child->name_en,30) }}
                        <span class="badge badge-success ml-1">Submenu</span>
                    </td>

                    <td>
                        &nbsp;&nbsp;&nbsp;{{ Str::limit($child->name_bn,30) }}
                    </td>

                    <td>
                        <img width="30" height="20"
                             src="{{ route('imagecache',['template'=>'sbixs','filename'=>$child->fi()]) }}">
                    </td>

                    <td>
                        @if($child->active == 1)
                            <button class="badge border-0 badge-primary categoryStatus"
                                data-url="{{ route('admin.categoryStatus',['category'=>$child->id]) }}">
                                Active
                            </button>
                        @else
                            <button class="badge border-0 badge-danger categoryStatus"
                                data-url="{{ route('admin.categoryStatus',['category'=>$child->id]) }}">
                                Inactive
                            </button>
                        @endif
                    </td>
                </tr>



                {{-- ================= CHILD SUB MENU ================= --}}
                @foreach($child->children as $subchild)

                    <tr>
                        <td></td>

                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-dark btn-xs dropdown-toggle"
                                   href="#"
                                   data-toggle="dropdown">
                                    Action
                                </a>

                                <div class="dropdown-menu">
                                    <a href="{{ route('admin.productCategoryEdit',$subchild) }}"
                                       class="dropdown-item">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>

                                    <form action="{{ route('admin.productCategoryDelete',$subchild) }}"
                                          method="post"
                                          onclick="return confirm('Are you sure to delete?')">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>

                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;↳ ↳ {{ Str::limit($subchild->name_en,30) }}
                            <span class="badge badge-info ml-1">Child</span>
                        </td>

                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Str::limit($subchild->name_bn,30) }}
                        </td>

                        <td>
                            <img width="30" height="20"
                                 src="{{ route('imagecache',['template'=>'sbixs','filename'=>$subchild->fi()]) }}">
                        </td>

                        <td>
                            @if($subchild->active == 1)
                                <button class="badge border-0 badge-primary categoryStatus"
                                    data-url="{{ route('admin.categoryStatus',['category'=>$subchild->id]) }}">
                                    Active
                                </button>
                            @else
                                <button class="badge border-0 badge-danger categoryStatus"
                                    data-url="{{ route('admin.categoryStatus',['category'=>$subchild->id]) }}">
                                    Inactive
                                </button>
                            @endif
                        </td>
                    </tr>

                @endforeach

            @endforeach

        @empty
            <tr>
                <td colspan="6" class="text-danger text-center">
                    No Category Found
                </td>
            </tr>
        @endforelse

    </tbody>
</table>