<div id="verify-account-modal" class="modal fade" tabindex="-1" aria-labelledby="verify-account-form-label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verify-account-form-label">Verify Account</h5>
            </div>
            <div class="modal-body">
                <form id="verify-account-form" method="post" action="{{ route('app.verify-account') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 text-end">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="password-input" placeholder="Enter your account password">
                                    <label for="password-input">Enter your account password</label>
                                </div>
                                <div class="feedback text-danger mt-2" id="feedback"></div>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="verify-account-continue-button" type="button" class="btn btn-primary">Verify</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        const verifyAccountBtn = document.querySelector('.verify-account-btn');
        const verifyAccountModalElm = document.getElementById('verify-account-modal');

        if (verifyAccountBtn) {
            const verifyAccountModal = new bootstrap.Modal(verifyAccountModalElm, {
                keyboard: false,
                backdrop: 'static',
            });

            verifyAccountBtn.addEventListener('click', () => {
                verifyAccountModal.show();
            });
        }

        const verifyAccountForm = document.getElementById('verify-account-form');
        const feedbackElm = document.getElementById('feedback');
        const verifyAccountContinueBtn = document.getElementById('verify-account-continue-button');

        if (verifyAccountForm) {
            verifyAccountForm.addEventListener('submit', (e) => {
                e.preventDefault();
                clearErrorFeedback();
                verifyAccountContinueBtn.disabled = true;

                const password = verifyAccountForm.querySelector('#password-input').value;

                axios.post(verifyAccountForm.action, { password })
                    .then(({data}) => {
                        console.log(data);
                        createAlert(data.msg, ALERT_SUCCESS);
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    })
                    .catch((err) => {
                        const { response: resp } = err;
                        console.log(resp);
                        if (resp.status == 422) {
                            showErrorFeedback(resp.data.errors.password[0])
                        } else if (resp.status == 400 || resp.status == 500) {
                            showErrorFeedback(resp.data.error);
                        }
                    })
                    .finally(() => {
                        verifyAccountContinueBtn.disabled = false;
                    });
            });
        }

        function clearErrorFeedback() {
            feedbackElm.textContent = "";
        }

        function showErrorFeedback(msg) {
            feedbackElm.textContent = msg;
        }
    </script>
@endpush
