<form method="post" x-data="feedbackForm()" @submit.prevent="submitForm">
    <section class="feedback">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            placeholder="ФИО*"
                            required
                            x-model="formData.name"
                        />
                        <div :class="{ 'hidden': ! formData?.errors?.name }" x-text="formData?.errors?.name"
                             class="w-full text-red-500 px-2 text-center"></div>
                    </div>
                    <div class="form-group">
                        <input
                            type="tel"
                            class="form-control"
                            name="phone"
                            placeholder="Телефон*"
                            required
                            x-model="formData.phone"
                        />
                        <div :class="{ 'hidden': ! formData?.errors?.phone }" x-text="formData?.errors?.phone"
                             class="w-full text-red-500 px-2 text-center"></div>
                    </div>
                    <div class="form-group">
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            placeholder="Email"
                            required
                            x-model="formData.email"
                        />
                        <div :class="{ 'hidden': ! formData?.errors?.email }" x-text="formData?.errors?.email"
                             class="w-full text-red-500 px-2 text-center"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <textarea
                            class="form-control"
                            name="message"
                            placeholder="Сообщение"
                            required
                            x-model="formData.message"
                        ></textarea>
                        <div :class="{ 'hidden': ! formData?.errors?.message }" x-text="formData?.errors?.message"
                             class="w-full text-red-500 px-2 text-center"></div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-subs" type="submit">Отправить</button>
                    </div>
                </div>

                <div :class="{ 'hidden': ! formMessage }" x-text="formMessage"
                     class="w-full text-red-500 px-4 pb-4 text-center"></div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <input type="checkbox" class="skin-square-green" checked name="agreement" required/>
                        <span>
                                Я согласен с Условиями использования сайта и даю согласие на обработку моих  <a
                                href="/pdf/privacy-policy.pdf" target="_blank" class="private">персональных
                                данных</a>
                            </span>
                    </div>
                </div>
            </div>

            <script>
                function feedbackForm() {
                    return {
                        formData: {
                            name: "",
                            phone: "",
                            email: "",
                            message: "",
                            errors: []
                        },
                        formMessage: "",
                        submitForm() {
                            axios
                                .post(
                                    route('feedback.store'),
                                    JSON.stringify(this.formData),
                                    {
                                        headers: {
                                            "Content-Type": "application/json",
                                            Accept: "application/json",
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                    }
                                )
                                .then((response) => {
                                    // this.formData.name = "";
                                    // this.formData.phone = "";
                                    // this.formData.email = "";
                                    // this.formData.message = "";
                                    this.formMessage = "Спасибо Вам за обратную связь!";
                                })
                                .catch((err) => {
                                    this.formData.errors = err?.response?.data?.errors;
                                    this.formMessage = "Проверьте правильность заполнения формы!";
                                });
                        },
                    };
                }
            </script>
        </div>
    </section>
</form>
