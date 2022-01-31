
<div>
    <h4 class="mb-4 text-2xl font-bold">Customers</h4>
    <div>
        <div class="container mx-auto">
            <form method="POST" wire:submit.prevent="storePizza">
                @csrf
                <div>
                    <label for="name">FirstName</label>
                    <input type="text" wire:model.lazy="name" class="w-full py-2 rounded">
                    @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="lastname">LastName</label>
                    <input type="text" wire:model.lazy="lastname" class="w-full py-2 rounded">
                    @error('lastname')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="address">Address</label>
                    <input type="text" wire:model.lazy="address" class="w-full py-2 rounded">
                    @error('address')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="number" wire:model.lazy="phone" class="w-full py-2 rounded">
                    @error('phone')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="zipcode">Zipcode</label>
                    <input type="text" wire:model.lazy="zipcode" class="w-full py-2 rounded">
                    @error('zipcode')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="city">City</label>
                    <input type="text" wire:model.lazy="city" class="w-full py-2 rounded">
                    @error('city')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="pizza_points">PizzaPoints</label>
                    <input type="number" wire:model.lazy="pizza_points" class="w-full py-2 rounded">
                    @error('pizzapoints')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="px-4 py-2 mt-4 text-white bg-blue-600 rounded">
                    Submit
                </button>
                <button type="submit" wire:click="update" class="px-4 py-2 text-white bg-indigo-600 rounded">
                    Update
                </button>
            </form>
        </div>
        <div class="flex flex-col mt-8">
            <div class="py-2">
                <div
                    class="min-w-full border-b border-gray-200 shadow">
                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                Id
                            </th>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                FirstName
                            </th>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                LastName
                            </th>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                Address
                            </th>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                Phone
                            </th>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                Zipcode
                            </th>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                City
                            </th>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                PizzaPoints
                            </th>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                Edit
                            </th>
                            <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                Delete
                            </th>
                        </tr>
                        </thead>

                        <tbody class="bg-white">
                        @foreach($customers as $customer)
                            <tr>
                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm text-gray-900">
                                                {{ $customer->id }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm text-gray-900">
                                        {{ $customer->first_name}}
                                    </div>
                                </td>

                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm text-gray-900">
                                        {{ $customer->last_name}}
                                    </div>
                                </td>

                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm text-gray-900">
                                        {{ $customer->address}}
                                    </div>
                                </td>

                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm text-gray-900">
                                        {{ $customer->phome}}
                                    </div>
                                </td>

                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm text-gray-900">
                                        {{ $customer->zipcode}}
                                    </div>
                                </td>

                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm text-gray-900">
                                        {{ $customer->city}}
                                    </div>
                                </td>

                                <td class="px-6 py-4 border-b border-gray-200">
                                    <div class="text-sm text-gray-900">
                                        {{ $customer->pizza_points}}
                                    </div>
                                </td>


                                <td class="px-6 py-4 border-b border-gray-200">
                                    <button wire:click="edit({{ $customer->id }})" class="px-4 py-2 text-white bg-blue-600">
                                        Edit
                                    </button>
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-500 border-b border-gray-200">
                                    <button wire:click="destroy({{ $customer->id }})" class="px-4 py-2 text-white bg-red-600">
                                        Delete
                                    </button>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $customers->links() }}
            </div>
        </div>
    </div>
</div>


