Rails.application.routes.draw do
  get 'principal/index'
  # For details on the DSL available within this file, see https://guides.rubyonrails.org/routing.html
  root :to => 'principal#index'
end
